function Animal() {
	this.race = "Dog";
	this.name = "Meggie";
	this.age = 2;
	this.weight = 5.8;

	this.toPee = function() {
		console.log("xiiiiii....");
	}

	this.toEat = function(kg) {
		console.log("hmmm..");
		this.weight = this.weight + kg;
	}
}

var meggie = new Animal();

var lulu = new Animal();
lulu.race = "Cat";
lulu.name = "Lulu";
lulu.age = 1;
lulu.weight = 2.5;