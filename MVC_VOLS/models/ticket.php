<?php
class ticket{

    private $codi;
    private $codi_reserva;
    private $total;
    private $data_ticket;

    public function __construct($codi,$codi_reserva,$total,$data_ticket)
    {
        $this->codi = $codi;
        $this->codi_reserva = $codi_reserva;
        $this->total = $total;
        $this->data_ticket = $data_ticket;
    }

    public function getCodi()
    {
        return $this->codi;
    }
    
     
    public function setCodi($codi)
    {
        $this->codi = $codi;

        return $this;
    }

   
    public function getCodi_reserva()
    {
        return $this->codi_reserva;
    }

   
    public function setCodi_reserva($codi_reserva)
    {
        $this->codi_reserva = $codi_reserva;

        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }

    
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

   
    public function getData_ticket()
    {
        return $this->data_ticket;
    }

   
    public function setData_ticket($data_ticket)
    {
        $this->data_ticket = $data_ticket;

        return $this;
    }
}
$a = new ticket(1,1,125,"2020-10-22");
echo $a->getData_ticket();
$a->setData_ticket("2020-01-01");
echo "<br>" . $a->getData_ticket();
?>