<?php

class Post
{
	private $id;
	private $title;
	private $body;
	private $publicationDate;
	private $user;
	private $comments;

	public function __construct($id, $title, $body, $publicationDate, $user=null, $comments=null)
	{
		$this->id = $id;
		$this->title = $title;
		$this->body = $body;
		$this->publicationDate = $publicationDate;
		$this->user = $user;
		$this->comments = is_null($comments) ? array() : $comments;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}
	public function getBody()
	{
		return $this->body;
	}

	public function setBody($body)
	{
		$this->body = $body;
	}

	public function getPublicationDate()
	{
		return $this->publicationDate;
	}

	public function setPublicationDate($publicationDate)
	{
		$this->publicationDate = $publicationDate;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function setUser($user)
	{
		$this->user = $user;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function setUserId($id)
	{
		$this->userId = $user;
	}

	public function getComments()
	{
		return $this->comments;
	}

	public function setComments($comments)
	{
		return $this->comments = $comments;
	}

}