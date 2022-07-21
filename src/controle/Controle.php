<?

class Controle
{
    protected $vue;

    public function __construct(Vue $vue)
    {
        $this->vue = $vue;
   
    }

    public function makeListePage()
    {
        $this->vue->makeListePage();
    }
}

?>