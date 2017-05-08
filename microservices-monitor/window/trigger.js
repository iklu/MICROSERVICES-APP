const handler = require('./handler/handler');

exports.main = function() {
    handler.parse({
        "version":"1.1.0","type":"0",
        "testing":true,
        "audience":"audience",
            "device_types":"device_types",
            "notification":{
                "android": {
                    "alert":"alert",
                    "extra":{
                        "type":"type",
                        "content":"content",
                        "services":"services"
                    }
                }
            }
        }
    );

    setTimeout(() => {
        handler.parse({
        "version":"1.1.0","type":"0",
        "testing":true,
        "audience":"audience",
            "device_types":"device_types",
            "notification":{
                "android": {
                    "alert":"alert",
                    "extra":{
                        "type":"type",
                        "content":"content",
                        "services":"services"
                    }
                }
            }
        });
    }, 2500);

    setTimeout(() => {
        handler.parse({
        "version":"1.1.0","type":"0",
        "testing":true,
        "audience":"audience",
            "device_types":"device_types",
            "notification":{
                "android": {
                    "alert":"alert",
                    "extra":{
                        "type":"type",
                        "content":"content",
                        "services":"services"
                    }
                }
            }
        });
    }, 4000);

    setTimeout(() => {
        handler.parse({
        "version":"1.1.0","type":"0",
        "testing":true,
        "audience":"audience",
            "device_types":"device_types",
            "notification":{
                "android": {
                    "alert":"alert",
                    "extra":{
                        "type":"type",
                        "content":"content",
                        "services":"services"
                    }
                }
            }
        });
    }, 6500);
};
