<?php
namespace gabrielpbzr\utils;
    /** 
     * Classe geradora de numeros de telefones brasileiros 
     * Util para testes de software.
     * @author Gabriel P. Bezerra
     */
    class GeradorNumerosTelefone{
        private $TABELA_UF_DDD = array(
            'AC'=>array('68'),
            'AL'=>array('82'),
            'AM'=>array('92', '97'),
            'AP'=>array('96'),
            'BA'=>array('71', '73', '74', '75', '77'),
            'CE'=>array('85', '88'),
            'ES'=>array('27', '28'),
            'GO'=>array('61', '62', '64'),
            'MA'=>array('98', '99'),
            'MG'=>array('31', '32', '33', '34', '35', '37', '38'),
            'MS'=>array('67'),
            'MT'=>array('65', '66'),
            'PA'=>array('91', '93', '94'),
            'PB'=>array('83'),
            'PE'=>array('81', '87'),
            'PI'=>array('86', '89'),
            'PR'=>array('41', '42', '43', '44', '45', '46'),
            'RJ'=>array('21', '22', '24'),
            'RN'=>array('84'),
            'RO'=>array('69'),
            'RR'=>array('95'),
            'RS'=>array('51', '53', '54', '55'),
            'SC'=>array('47', '48', '49'),
            'SE'=>array('79'),
            'SP'=>array('11', '12', '13', '14', '15', '16', '17', '18', '19'),
            'TO'=>array('63')
        );
        
        public function __constructor(){
            
        }
        
        public function geraNumeroTelefoneFixo($uf){
            $DDDs = array();
            if(!array_key_exists($uf, $this->TABELA_UF_DDD)){
                return "";
            }
            
            $DDDs = $this->TABELA_UF_DDD[$uf];
            $len = count($DDDs) - 1;
            $ddd = $DDDs[rand(0, $len)];
            $prefixo = rand(2000, 9999);
            $sufixo = rand(2000, 9999);

            $numero = "$ddd $prefixo-$sufixo";
            
            return $numero;
        }
    }
?>
