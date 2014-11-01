<?
class htmlPage{
	/*
	public function setTitle($newTitle){
                $this->pageTitle = $newTitle;
                return;
        }
	*/
        
    public function streamTop() {
    require ('includes/header.php');
	require ('includes/navigation.php');	
    }    
	

	public function streamBottom(){
                require('includes/footer.php');  
        }

}
?>