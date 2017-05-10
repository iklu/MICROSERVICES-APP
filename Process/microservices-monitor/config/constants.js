app.constant(
    'URLS', {
        imgUpload: '/web/api/filename',
        baseUrl: BaseUrl.siteUrl,
        apiUrl: 'http://192.168.0.159/API/web/api'
    }
);

app.constant(
    'STORAGE', {
        amazon_s3_endpoint: 's3-us-west-2.amazonaws.com',
        amazon_s3_bucket_name: 'meineke-rearc',
        imagesDirectory: 'resources/uploads/images/',
        couponsDirectory: 'resources/uploads/images/coupons/'
    }
);


app.constant(
'VIDEO',{
        //for specific settings extend this
        config:{
            width: 320,
            height: 194,
            autoHide: false,
            autoPlay: false,
            responsive: false,
            stretch: {label: "None", value: "none"},
            sources:[],
            theme: {
                url: "",
                playIcon: "&#xe000;",
                pauseIcon: "&#xe001;",
                volumeLevel3Icon: "&#xe002;",
                volumeLevel2Icon: "&#xe003;",
                volumeLevel1Icon: "&#xe004;",
                volumeLevel0Icon: "&#xe005;",
                muteIcon: "&#xe006;",
                enterFullScreenIcon: "&#xe007;",
                exitFullScreenIcon: "&#xe008;"
            },
            plugins: {
                poster: {
                    url: ""
                }
            }
        },
        modes:[
            {label: "None", value: "none"},
            {label: "Fit", value: "fit"},
            {label: "Fill", value: "fill"}
        ]
    }
);


app.constant(
    'Images', {
        fallback:"http://www.wwubap.org/wp-content/uploads/2012/03/no-available-image.png" 
    }
);