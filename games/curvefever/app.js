//application (move to app.js)
window.Game = {
	//model
	Curve : {},
	//collection
	CurveManager : {},
	//view
	Views : {},
	//controller
	Controller : {},
	//keys
	keys:{},
	//keymaps
	keyMaps:[
		{
			label: '<-/->',
			up: 39,
			down: 37,
			inUse: false,
			color: '#f00',
		},
		{
			label: 'A/S',
			up: 83,
			down: 65,
			inUse: false,
			color: '#ff0',
		},
		{
			label: 'G/H',
			up: 72,
			down: 71,
			inUse: false,
			color: '#0f0',
		},
		{
			label: 'K/L',
			up:76,
			down:75,
			inUse: false,
			color:'#f0f',
		},
	],
};

