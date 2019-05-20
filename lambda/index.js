const waifus = require("./waifus");

exports.handler = async (event) => {
    let waifuId=event['queryStringParameters']['waifu'];
    let waifu=waifus[Number(waifuId)];
    const response = {
        statusCode: 200,
        headers: {
            'Access-Control-Allow-Origin': '*'
        },
        body: JSON.stringify({name:waifu.name, image: waifu.display_picture, description: waifu.description}),
    };
    return response;
};
