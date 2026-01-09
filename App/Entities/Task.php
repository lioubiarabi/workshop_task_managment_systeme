<?php

class Task
{
    public function __construct(
        private int $id,
        private string $title,
        private string $description,
        private int $projectId,
        private int $assigneeId,
        private int $reporterId,
        private string $priority,
        private string $status,
        private float $estimatedHours,
        private float $actualHours,
        private DateTime $dueDate,
        private DateTime $createdAt,
        private DateTime $updatedAt
    ) {}
}
