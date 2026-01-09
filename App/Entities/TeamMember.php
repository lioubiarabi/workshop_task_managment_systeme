<?php

class TeamMember
{
    public function __construct(
        private int $id,
        private string $username,
        private string $email,
        private string $teamId,
        private string $createdAt
    ) {}

    
}
