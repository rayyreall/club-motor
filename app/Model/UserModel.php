<?php

namespace clubMotor\Model;



use clubMotor\App\Database;
use clubMotor\Domain\User;

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }
    public function findAll(): array
    {
        $result = $this->db->query("SELECT * FROM users");
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $user = new User();
            $user->setId($row['id']);
            $user->setName($row['name']);
            $user->setUsername($row['username']);
            $user->setPassword($row['password']);
            $user->setEmail($row['email']);

            $users[] = $user;
        }
        return $users;
    }
    public function update(User $user): void
    {
        $stmt = $this->db->prepare("UPDATE users SET name = ?, username = ?, password = ?, email = ? WHERE id = ?");
        $name = $user->getName();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $email = $user->getEmail();
        $id = $user->getId();

        $stmt->bind_param("ssssi", $name, $username, $password, $email, $id);
        $stmt->execute();
        $stmt->close();
    }
    public function insert(User $user): void
    {
        $stmt = $this->db->prepare("INSERT INTO users (name, username, password, email) VALUES (?, ?, ?, ?)");
        $name = $user->getName();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $email = $user->getEmail();

        $stmt->bind_param("ssss", $name, $username, $password, $email);
        $stmt->execute();
        $stmt->close();
    }
    public function findByUsernameAndPassword($username, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result->fetch_assoc();
    }
}