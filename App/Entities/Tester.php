<?php

class Tester extends TeamMember
{

    public function canAssignTasks(): bool
    {
        return false;
    }
    public function canCreateProject(): bool
    {
        return false;
    }
    public function getRolePermissions(): array
    {
        return [
            'view_tasks',
            'test_tasks'
        ];
    }
}
