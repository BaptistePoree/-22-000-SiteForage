<?php

require_once("model/bdd/imageData/BlindTest/ImageData_BlindTest_TypeExtrait.php");
require_once("model/bdd/InterfaceStorage.php");

class ExtraitSQL 
//extends SQL 
// implements  InterfaceStorage 
{
    public function __construct(Vue $vue = null)
    { $this->view = $vue; }

	public function create(Object $c){}
    public function getId($id){
        try {
            $bd = new PDO(DB_Mysql_DSN_BlindTest, DB_Mysql_USERNAME, DB_Mysql_PASSWORD);
            $rq = " SELECT Ext.id, Ext.nom, Ext.lienYT, Ext.dureeYT, Ext.imageLien, TExtr.id idTextr, TExtr.nom nomTextr
                    FROM Extrait Ext, TypeExtrait TExtr, TypeExtrait_Extrait TExtr_Ext, Aleatoir Ale
                    WHERE Ale.idAleatoir = :id
                    AND Ale.idExtrait0 = Ext.id
                    AND Ext.id = TExtr_Ext.idExtrait
                    AND TExtr_Ext.idTypeExtrait = TExtr.id;";
            $stmt = $bd->prepare($rq);
            $data = array(":id" => $id);
            $stmt->execute($data);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (sizeof($result) === 0) {
                return null;
            } else {
                return $result;
            }
        } catch (PDOException $e) {
            $this->view->makeErrorPage('Erreur lors d\'une requête à la base de donnée', $e->getMessage());
            return 'error';
        }
    }

	public function getAll(){
        try {
            $bd = new PDO(DB_Mysql_DSN_BlindTest, DB_Mysql_USERNAME, DB_Mysql_PASSWORD);
            $rq = " SELECT DISTINCT Ext.id, Ext.nom, Ext.lienYT, Ext.dureeYT, Ext.imageLien, TExtr.id idTextr, TExtr.nom nomTextr 
                        FROM Extrait Ext, TypeExtrait TExtr, TypeExtrait_Extrait TExtr_Ext 
                        WHERE Ext.id = TExtr_Ext.idExtrait 
                        AND TExtr_Ext.idTypeExtrait = TExtr.id 
                        AND (TExtr_Ext.idTypeExtrait = '1' 
                            OR TExtr_Ext.idTypeExtrait = '2'
                            )";
            $stmt = $bd->prepare($rq);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (sizeof($result) === 0) {
                return null;
            } else {
                // echo "cool" . $result;
                // print_r($result);
                return $result;
            }
        } catch (PDOException $e) {
            $this->view->makeErrorPage('Erreur lors d\'une requête à la base de donnée', $e->getMessage());
            return 'error';
        }
    }

    public function readAllListes($array)
    {
        if (is_array($array)) {
            $keys = array_keys($array); 
            $temp = $array;
            $temp1 = $array;
            $temp2 = $array;
            $array = NULL;
            shuffle($temp);
            shuffle($temp1);
            shuffle($temp2);
            foreach ($temp as $k => $item) {
                $array[$keys[$k]][0] = $temp[$k];
                $array[$keys[$k]][1] = $temp1[$k];
                $array[$keys[$k]][2] = $temp2[$k];
            }
            return $array;
        }
        return false;
    }
    
	// public function readAllListes(){}

	public function setId($id, Object $c){}
	public function delete($id){}
	public function deleteAll(){}


}
