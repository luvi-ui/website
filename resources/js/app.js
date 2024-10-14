import collapse from "@alpinejs/collapse";
import anchor from "@alpinejs/anchor";

let count = 1;
const idMap = new WeakMap();

window.getObjectId = (object) => {
    const objectId = idMap.get(object);
    if (objectId === undefined) {
        count += 1;
        idMap.set(object, count);

        return count;
    }

    return objectId;
};

document.addEventListener(
    "alpine:init",
    () => {
        const modules = import.meta.glob("./plugins/**/*.js", { eager: true });

        for (const path in modules) {
            window.Alpine.plugin(modules[path].default);
        }
        window.Alpine.plugin(collapse);
        window.Alpine.plugin(anchor);
    },
    { once: true },
);
