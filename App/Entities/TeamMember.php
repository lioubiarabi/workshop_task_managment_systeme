<?php

abstract class TeamMember
{
    public function __construct(
        private int $id,
        private string $username,
        private string $email,
        private string $passwordHash,
        private string $teamId,
        private string $createdAt
    ) {}

    abstract public function canCreateProject(): bool;
    abstract public function canAssignTasks(): bool;
    abstract public function getRolePermissions(): array;

    public function verifyPassword(string $password): bool
    {
        return password_verify($password, $this->passwordHash);
    }

    public function setPassword(string $password): void
    {
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }
}
