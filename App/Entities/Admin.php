<?php

class Admin extends TeamMember
{

    public function canAssignTasks(): bool {
        return false;
    }
    public function canCreateProject(): bool {
        return false;
    }
    public function getRolePermissions(): array {
        return [];
    }
}
