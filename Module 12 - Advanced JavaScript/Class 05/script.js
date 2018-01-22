function Animal() {
	this.race = "Dog";
	this.name = "Meggie";
	this.age = 2;
	this.weight = 5.8;

	this.toPee = function() {
		console.log("xiiiiii....");
	}

	this.toEat = function(kg) {
		for(var i=0;i<kg;i++) {
			if(i%2 != 0) {
				this.toChew(i);
			}
		}
		console.log("hmmm..");
		this.weight = this.weight + (kg/2);
	}
	this.toChew = function(i) {
		console.log((i+1)+" - Nhoc..");
	}
}

var meggie = new Animal();

var lulu = new Animal();
lulu.race = "Cat";
lulu.name = "Lulu";
lulu.age = 1;
lulu.weight = 2.5;
lulu.toEat(5);