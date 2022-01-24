<html>

<head>
    <link href="node_modules/gridstack/dist/gridstack.min.css" rel="stylesheet" />
    <link href="node_modules/gridstack/dist/gridstack.min.css" rel="stylesheet" />
    <script src="node_modules/gridstack/dist/es5/gridstack-poly.js"></script>
    <script src="node_modules/gridstack/dist/es5/gridstack-jq.js"></script>
    <script src="node_modules/gridstack/dist/gridstack-h5.js"></script>
    <!-- OR jquery-ui drag&drop (195k) -->
    <script src="node_modules/gridstack/dist/gridstack-jq.js"></script>
    <!-- OR static grid (40k) -->
    <script src="node_modules/gridstack/dist/gridstack-static.js"></script>
    <style type="text/css">
        .grid-stack {
            background: lightgoldenrodyellow;
        }

        .grid-stack-item-content {
            color: #2c3e50;
            text-align: center;
            background-color: #18bc9c;
        }
    </style>
</head>

<body>
    <h1>gridstack.js base demo for issues</h1>
    <p>Fork and modify me to demonstrate your issue when creating an issue for gridstack.js</p>
    <div><a class="btn btn-default" onClick="addNewWidget()" href="#">Add Widget</a></div>
    <br />

    <div class="grid-stack"></div>

    <script type="text/javascript">
        var options = { // put in gridstack options here
            disableOneColumnMode: true, // for jfiddle small window size
            float: false
        };
        var grid = GridStack.init(options);

        var count = 0;
        var items = [{
                x: 0,
                y: 0,
                w: 2,
                h: 2
            },
            {
                x: 2,
                y: 0,
                w: 2
            },
            {
                x: 3,
                y: 1,
                h: 2
            },
            {
                x: 0,
                y: 2,
                w: 2
            },
        ];

        addNewWidget = function() {
            var node = items[count] || {
                x: Math.round(12 * Math.random()),
                y: Math.round(5 * Math.random()),
                w: Math.round(1 + 3 * Math.random()),
                h: Math.round(1 + 3 * Math.random())
            };
            node.content = String(count++);
            grid.addWidget(node);
            return false;
        };

        addNewWidget();
        addNewWidget();
    </script>
</body>

</html>
