<?php
Class Relacoes{
    private $seguidor;
    private $seguido;
    private $autenticacao;

    
    public function setSeguidor($id, $seguidor, $seguido, $autenticacao){
        
       $stmt = $pdo->prepare('SELECT * FROM relacoes WHERE id_categoria = ?'); 
       $stmt-> bindParam(1,$id, PDO::PARAM_INT);
       $stmt-> bindParam(2,$seguidor, PDO::PARAM_INT); 
       $stmt-> bindParam(3,$seguido, PDO::PARAM_INT); 
       $stmt-> bindParam(3,$autenticacao, PDO::PARAM_INT); 

       $stmt-> execute(); 
       $resultado = $stmt->fetchAll(); 
            return $resultado

       $result = mysqli_query($conn, $sql);
       $sql = ('SELECT * FROM relacoes where id_categoria = ?');
       //segue = meu_id or seguido =meu_id
        //quem segue
       $_session['id'] ;

   }
   public function setSeguido($seguido){
       $this-> seguido = $seguido;
   } 
   public function setAutenticacao($autenticacao){
       $this-> autenticacao =$autenticacao;
   } 
    
  public function getSeguidor(){
     return $this-> seguidor;
      
      $sql = "SELECT id, seguidor, seguido FROM relacoes";
      $id = $id; 
      $stmt = $pdo->prepare('SELECT * FROM itens WHERE id_categoria = ?'); 
      $stmt-> bindParam(1, $id,$seguidir,$seguido,$autenticacao PDO::PARAM_INT); 
      stmt-> execute(); 
      $resultado = $stmt->fetchAll(); 
        return $resultado

      $result = mysqli_query($conn, $sql);
      $sql = "Select * from tabela where";
      //segue = meu_id or seguido =meu_id
      //quem segue;     
      $_session['id'] 
     

 }  
    
  public function getSeguido(){
      return $this-> seguido;
  }  
  
  public function getAutenticacao(){
      return $this-> autenticacao;
  }  
}
  ?>

    

    
 
    

  