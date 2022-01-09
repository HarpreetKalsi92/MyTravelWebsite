<?php 
	class Agent {
		public $fname;
		public $midinitial;
		public $lname;
		public $phone;
		public $email;
		public $pos;
		public $agcyid;
		
	

    public function__construct(){
    	$this->fname=$_REQUEST["AgtFirstName"];
    	$this->midinitial=$_REQUEST["AgtMiddleInitial"];
    	$this->lname=$_REQUEST["AgtLastName"];
    	$this->phone=$_REQUEST["AgtBusPhone"];
    	$this->email=$_REQUEST["AgtEmail"];
    	$this->pos=$_REQUEST["AgtPosition"];
    	$this->agcyid=$_REQUEST["AgencyId"];
    	


    }
    public function getFname() {
			return $this->fname;
		}
	public function getMidinitial() {
			return $this->midinitial;
		}

    public function getLname() {
			return $this->lname;
		}
	public function getPhone() {
			return $this->phone; 
		}
			
	public function getEmail() {
			return $this->email;
		}
			
    public function getPos() {
			return $this->pos;
		}
	public function getAgcyID() {
			return $this->agcyid;
		}


                                       //set function

		public function setFname($Fnamein)
		{
			$this->Fname=$Fnamein;
		}

        public function setMidInitial($midinitialin)
		{
			$this->midinitial=$midinitialin;
		}

		public function setLname($lnamein)
		{
			$this->lname=$lnamein;
		}

		public function setPhone($phonein)
		{
			$this->phone=$phonein;
		}

		public function setEmail($emailin)
		{
			$this->email=$emailin;
		}

		public function setAgencyId($agcyidin)
		{
			$this->agcyid=$agcyidin;
		}


		public function__toString(){
			return "Agent:"

			.$this->fname." "

			.$this->midinitial." "

			.$this->lname." "

			.$this->phone." "

			.$this->email." "

			.$this->pos." "

			.$this->agcyid." ";

		}

	}
?>