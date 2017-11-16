<?php

class Calculator {

	private $n;

	public function __construct($initialNumber) {
		$this->n = $initialNumber;
	}

	public function sum($n1) {
		$this->n += $n1;
		return $this;
	}

	public function substract($n1) {
		$this->n -= $n1;
		return $this;
	}

	public function multiplication($n1) {
		$this->n *= $n1;
		return $this;
	}

	public function division($n1) {
		$this->n /= $n1;
		return $this;
	}

	public function result() {
		return $this->n;
	}
}

$calc = new Calculator(10);
$calc->sum(2)->substract(3)->multiplication(5)->division(2);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 20 - Creating an OO Calculator</title>
	</head>
	<body>
		<?php echo "Result: ".$calc->result(); ?>
	</body>
</html>