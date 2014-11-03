<?
class htmlPage{
	
    protected $pageTitle = "Welcome";


	public function setTitle($newTitle){
        $this->pageTitle = $newTitle;
        return;
    }
	
        
    public function streamTop() {
        require ('includes/header.php');	
    }    
	

	public function streamBottom(){
        require('includes/footer.php');  
    }

}
?>