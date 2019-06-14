const fs = require('fs');

class AssetLoader {
    constructor() {
        const raw = fs.readFileSync(__dirname + '/assets.json');
        this.assets = JSON.parse(raw);
    }

    get(name) {
        name = name.split('.');
        return this.assets[name[0]][name[1]];
    }
}

module.exports = new AssetLoader();
