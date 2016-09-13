new Vue
({
	el: "#container",

	data:
	{
		fix: false,
		flip: true,
		update: false,
		destroy: false,
		stats: true,
		help: false
	},

	methods:
	{
		Fix: function()
		{
			this.fix =! this.fix;
		},

		Flip: function()
		{
			this.flip =! this.flip;
		},

		More: function()
		{
			this.more =! this.more;
		},

		Update: function()
		{
			this.update = true;
			this.destroy = false;
			this.stats = false;
			this.help = false;
		},

		Destroy: function()
		{
			this.destroy = true;
			this.update = false;
			this.stats = false;
			this.help = false;
		},

		Stats: function()
		{
			this.stats = true;
			this.destroy = false;
			this.update = false;
			this.help = false;
		},

		Help: function()
		{
			this.help = true;
			this.stats = false;
			this.destroy = false;
			this.update = false;
		},

		Off: function()
		{
			this.help = false;
			this.stats = false;
			this.destroy = false;
			this.update = false;
		},

	}
});
