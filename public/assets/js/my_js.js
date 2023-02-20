function getContrast(t) {
    "use strict";
    return "#" === t.slice(0, 1) && (t = t.slice(1)), 3 === t.length && (t = t.split("").map(function(t) {
        return t + t
    }).join("")), (299 * parseInt(t.substr(0, 2), 16) + 587 * parseInt(t.substr(2, 2), 16) + 114 * parseInt(t
        .substr(4, 2), 16)) / 1000 >= 128 ? "no-white-text" : "is-white-text"
}
