<?php
require_once 'config.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = $_SERVER['REQUEST_URI'];

switch ($method) {
    case 'GET':
        if (preg_match('/^\/api\/(\d+)$/', $request, $matches)) {
            $userId = $matches[1];
            getPerson($userId);
        } else {
           
            getAllPersons();
        }
        break;
    case 'POST':
        if ($request === '/api') {
            createPerson();
        } else {
            
        }
        break;
    case 'PUT':
    case 'PATCH':
        if (preg_match('/^\/api\/(\d+)$/', $request, $matches)) {
            $userId = $matches[1];
            updatePerson($userId);
        } else {
           
        }
        break;
    case 'DELETE':
        if (preg_match('/^\/api\/(\d+)$/', $request, $matches)) {
            $userId = $matches[1];
            deletePerson($userId);
        } else {
            
        }
        break;
    default:
        
        break;
}


function createPerson()
{
   
    $data = json_decode(file_get_contents('php://input'), true);

    
    $name = $data['name'];
    $age = $data['age'];

   
    global $db;
    $stmt = $db->prepare('INSERT INTO persons (name, age) VALUES (?, ?)');
    $stmt->execute([$name, $age]);

    header('Content-Type: application/json');
    echo json_encode(['message' => 'Person created successfully']);
}

// Function to fetch details of a person
function getPerson($userId)
{
    // Fetch the person data from the database
    global $db;
    $stmt = $db->prepare('SELECT * FROM persons WHERE id = ?');
    $stmt->execute([$userId]);
    $person = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$person) {
        // Handle person not found
        header('HTTP/1.1 404 Not Found');
        echo json_encode(['message' => 'Person not found']);
        return;
    }

    
    header('Content-Type: application/json');
    echo json_encode($person);
}


function updatePerson($userId)
{
   
    $data = json_decode(file_get_contents('php://input'), true);

    
    $name = $data['name'];
    $age = $data['age'];

    
    global $db;
    $stmt = $db->prepare('UPDATE persons SET name = ?, age = ? WHERE id = ?');
    $stmt->execute([$name, $age, $userId]);

  
    header('Content-Type: application/json');
    echo json_encode(['message' => 'Person updated successfully']);
}


function deletePerson($userId)
{
   
    global $db;
    $stmt = $db->prepare('DELETE FROM persons WHERE id = ?');
    $stmt->execute([$userId]);

    
    header('Content-Type: application/json');
    echo json_encode(['message' => 'Person deleted successfully']);
}


function getAllPersons()
{
    global $db;
    $stmt = $db->prepare('SELECT * FROM persons');
    $stmt->execute();
    $persons = $stmt->fetchAll(PDO::FETCH_ASSOC);

  
    header('Content-Type: application/json');
    echo json_encode($persons);
}