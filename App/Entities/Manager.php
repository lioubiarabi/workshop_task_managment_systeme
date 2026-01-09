<?php

class Manager extends TeamMember
{

    public function canAssignTasks(): bool
    {
        return true;
    }
    public function canCreateProject(): bool
    {
        return true;
    }
    public function getRolePermissions(): array
    {
        return [
            
        ];
    }
}
