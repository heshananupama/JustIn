// Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2017-06-01',
            rooms: 26660,
            events: null,
            restaurant: 26470
        }, {
            period: '2017-06-02',
            rooms: 27780,
            events: 22940,
            restaurant: 24401
        }, {
            period: '2017-06-03',
            rooms: 49102,
            events: 19069,
            restaurant: 25010
        }, {
            period: '2017-06-04',
            rooms: 37607,
            events: 35907,
            restaurant: 56809
        }, {
            period: '2017-06-05',
            rooms: 68100,
            events: 19140,
            restaurant: 22930
        }, {
            period: '2017-06-06',
            rooms: 56700,
            events: 42930,
            restaurant: 18810
        }, {
            period: '2017-06-07',
            rooms: 48200,
            events: 37905,
            restaurant: 15880
        }, {
            period: '2017-06-08',
            rooms: 150730,
            events: 59670,
            restaurant: 51750
        }, {
            period: '2017-06-09',
            rooms: 10687,
            events: 44600,
            restaurant: 20280
        }, {
            period: '2017-06-10',
            rooms: 84320,
            events: 57130,
            restaurant: 10791
        }],
        xkey: 'period',
        ykeys: ['rooms', 'events', 'restaurant'],
        labels: ['rooms', 'events', 'restaurant'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
            d: '2012-10-01',
            visits: 802
        }, {
            d: '2012-10-02',
            visits: 783
        }, {
            d: '2012-10-03',
            visits: 820
        }, {
            d: '2012-10-04',
            visits: 839
        }, {
            d: '2012-10-05',
            visits: 792
        }, {
            d: '2012-10-06',
            visits: 859
        }, {
            d: '2012-10-07',
            visits: 790
        }, {
            d: '2012-10-08',
            visits: 1680
        }, {
            d: '2012-10-09',
            visits: 1592
        }, {
            d: '2012-10-10',
            visits: 1420
        }, {
            d: '2012-10-11',
            visits: 882
        }, {
            d: '2012-10-12',
            visits: 889
        }, {
            d: '2012-10-13',
            visits: 819
        }, {
            d: '2012-10-14',
            visits: 849
        }, {
            d: '2012-10-15',
            visits: 870
        }, {
            d: '2012-10-16',
            visits: 1063
        }, {
            d: '2012-10-17',
            visits: 1192
        }, {
            d: '2012-10-18',
            visits: 1224
        }, {
            d: '2012-10-19',
            visits: 1329
        }, {
            d: '2012-10-20',
            visits: 1329
        }, {
            d: '2012-10-21',
            visits: 1239
        }, {
            d: '2012-10-22',
            visits: 1190
        }, {
            d: '2012-10-23',
            visits: 1312
        }, {
            d: '2012-10-24',
            visits: 1293
        }, {
            d: '2012-10-25',
            visits: 1283
        }, {
            d: '2012-10-26',
            visits: 1248
        }, {
            d: '2012-10-27',
            visits: 1323
        }, {
            d: '2012-10-28',
            visits: 1390
        }, {
            d: '2012-10-29',
            visits: 1420
        }, {
            d: '2012-10-30',
            visits: 1529
        }, {
            d: '2012-10-31',
            visits: 1892
        }, ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'd',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['visits'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Visits'],
        // Disables line smoothing
        smooth: false,
        resize: true
    });

    // Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            device: 'rooms',
            geekbench: 136
        }, {
            device: 'rooms 3G',
            geekbench: 137
        }, {
            device: 'rooms 3GS',
            geekbench: 275
        }, {
            device: 'rooms 4',
            geekbench: 380
        }, {
            device: 'rooms 4S',
            geekbench: 655
        }, {
            device: 'rooms 5',
            geekbench: 1571
        }],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Geekbench'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });


});
