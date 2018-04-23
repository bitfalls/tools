BigNumber.config({ EXPONENTIAL_AT: 50 });
BigNumber.config({ ERRORS: false });

function init(){
	calculateEther("ether", new BigNumber(1));
}
function calculate(el){
		calculateEther(el.id, convertToEther(el));
		return true;
}

mapping = {
  'wei': 1000000000000000000,
  'kwei':1000000000000000,
  'mwei': 1000000000000,
  'gwei': 1000000000,
  'szabo': 1000000,
  'finney': 1000,
  'ether': 1,
  'kether': 0.001,
  'mether': 0.000001,
  'gether': 0.000000001,
  'tether': 0.000000000001
};

function calculateEther(id,v){
  for (let key in mapping) {
    if (mapping.hasOwnProperty(key)) {
      if(id !== key ) document.getElementById(key).value = v.times(new BigNumber(mapping[key])).toString();
    }
  }
}

function convertToEther(el){
	let id = el.id;
	let value = new BigNumber(el.value);
	value = value.times(new BigNumber(mapping[id]));
	return value;
}

init();