<?php

class VideoNew
{
}

class User
{
    public function download(VideoNew $video)
    {
        if (!$this->subscribed()) {
            throw new Exception('You must subscribe to download videos.');
        }
    }

    public function subscribed()
    {
        return false;
    }
}

// (new User())->download(new VideoNew());

class TeamException extends Exception
{
    public static function fromTooManyMembers()
    {
        return new static('You may not add more than 3 team members.');
    }
}

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class TeamNew
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members) === 3) {
            throw TeamException::fromTooManyMembers();
        }
        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}

class TeamMemberController
{
    public function store()
    {
        try {
            $team = new TeamNew();
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('John Doe'));
            $team->add(new Member('Frank Doe'));
            $team->add(new Member('Susam Doe'));
            var_dump($team->members());
        } catch (TeamException $e) {
            var_dump($e->getMessage());
        }
    }
}

(new TeamMemberController())->store();

