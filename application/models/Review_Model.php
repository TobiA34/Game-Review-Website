<?php
class Review_Model extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getReviews()
	{

		//load the database
		$this->load->database();
		// store query inside this variable
		$query = $this->db->get('reviews');
		//return the result that we get from the query
		return $query->result();

	}

	public function getArticle($slug)
	{
		$this->db->select('*');
		$this->db->from('reviews,article');
		$this->db->where("reviews.review_id = article.review_id AND reviews.slug = '$slug'");
		$query = $this->db->get();

		return $query->result();

	}

	public function displayComments($slug){
 		$this->db->select('*');
		$this->db->from('reviews,users,comments');
		$this->db->where("reviews.review_id = comments.review_id AND users.user_id = comments.user_id AND reviews.slug = '$slug'");
		$query = $this->db->get();

		return $query->result();

	}

	public function displayTotalComments($slug){
		$this->db->query("COUNT(comments.text),reviews.review_id,users.user_id");
		$this->db->from(' FROM comments,reviews,users');
		$this->db->where("reviews.review_id = comments.review_id AND users.user_id = comments.user_id AND reviews.slug = '$slug'");

		$this->db->get();

		return $this->db->get()->row()->text;
	}


	public function insert_comments($data)
	{

		$this->db->insert('comments',$data);
		var_dump($this->db->last_query());

	}

	public function getReviewID($slug){
		$this->db->select('review_id');
		$this->db->from('reviews');
		$this->db->Where('slug = '. $slug);
		return $this->db->get()->row()->review_id;
	}


	function getUserID($username)
	{
		$this->db->select('user_id');
		$this->db->from('users');
		$this->db->where('username',$username);
		return $this->db->get()->row()->user_id;
	}
}
