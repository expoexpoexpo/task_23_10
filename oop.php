interface CarInterface
{
    public function move();
}
class Cars implements CarInterface 
{
    public function move();
}
class Cars
{
    protected function move()
    {
        echo $this->forward;
    }
    protected function beep()
    {
        echo $this->onBeep;
    }
    protected function wipers()
    {
        echo $this->onWipers;
    }
}
class Audi extends Cars
{
    public $color = 'Красный';
    public $engine = '2.0 литра'
    public $forward = 'Едем вперед';
    public $back = 'Едем назад';
    public $onBeep = 'Бип бип';
    public $onWipers = 'Вжух вжух';
    private function N2O()
    {
        $this->move();
    }
  
}
class Toyota extends Cars
{
    public $color = 'Черный';
    public $engine = '2.5 литра';
    public $forward = 'Едем вперед';
    public $back = 'Едем назад';
    public $onBeep = 'Бип бип';
    public $onWipers = 'Вжух вжух';
    private function N2O()
    {
        $this->move();
    }
}
class Caterpillar extends Cars
{
    public $color = 'Желтый';
    public $engine = '5.0 литра';
    public $forward = 'Едем вперед';
    public $back = 'Едем назад';
    public $onBeep = 'Бип бип';
    public $onWipers = 'Вжух вжух';
    private function bucket()
    {
        $this->move();
    }
    $car = new Caterpillar();
    function testCars(Cars $car)
    $car->move();
}