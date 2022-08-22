<?php
use \PhpCleanArchitecture\Domain\Entity\Conference;

beforeEach(function() {
    $this->conference = new Conference('title 1', 1,2022, 'theSlug');
});

it("tests getTitle()", function() {
    $expectedTitle = 'title 1';
    expect($this->conference->getTitle())->toBe($expectedTitle);
});

it('tests setTitle()', function() {
    $expectedTitle = 'title 2';
    $this->conference->setTitle('title 2');
    expect($this->conference->getTitle())->toBe($expectedTitle);
});

it("tests getSlug()", function() {
    $expectedSlug = 'theSlug';
    expect($this->conference->getSlug())->toBe($expectedSlug);
});

it('tests setSlug()', function() {
    $expectedSlug = 'slug 2';
    $this->conference->setSlug('slug 2');
    expect($this->conference->getSlug())->toBe($expectedSlug);
});