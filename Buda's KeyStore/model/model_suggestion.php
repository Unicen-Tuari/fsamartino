<?php
class model_suggestion{
  private $modelSuggestion;
  function __construct()  {
    $this->modelSuggestion=new PDO('mysql:host=localhost;'. 'dbname=BudaStore; charset=utf8','root','');
  }

  function insertSuggestion($tagUsr, $typeSuggest, $textSuggest){
    $insert = $this->modelSuggestion->prepare("INSERT INTO sugerencia(tagUsr, typeSuggest, textSuggest)
                                             VALUES(?,?,?)");
    $insert->execute(array($tagUsr, $typeSuggest, $textSuggest ));
    var_dump($textSuggest);
  }
}
 ?>
