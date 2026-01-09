<?php

interface Prioritizable {
    public function setPriority(string $priority): void;
    public function getPriority(): string;
    public function increasePriority(): void;
    public function decreasePriority(): void;
    public function isHighPriority(): bool;
}