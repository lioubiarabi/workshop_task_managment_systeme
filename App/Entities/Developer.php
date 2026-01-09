<?php

class Developer extends TeamMember
{

    public function canAssignTasks(): bool {
        return false;
    }
    public function canCreateProject(): bool {
        return false;
    }
    public function getRolePermissions(): array {
        return ['work_on_tasks'];
    }
}
