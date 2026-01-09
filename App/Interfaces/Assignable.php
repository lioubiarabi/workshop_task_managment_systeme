<?php

interface Assignable {
    public function assignTo(int $assigneeId): bool;
    public function unassign(): void;
    public function isAssigned(): bool;
}