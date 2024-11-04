export default function (Alpine) {
    Alpine.directive("dropdown-menu", (el, directive) => {
        if (!directive.value) handleRoot(el, Alpine);
        // else if (directive.value === "items") handleItems(el, Alpine);
        // else if (directive.value === "item") handleItem(el, Alpine);
        // else if (directive.value === "checkboxitem")
        //     handleCheckboxItem(el, Alpine);
        // else if (directive.value === "radiogroup") handleRadioGroup(el, Alpine);
        // else if (directive.value === "radioitem") handleRadioItem(el, Alpine);
        // else if (directive.value === "button") handleButton(el, Alpine);
        // else if (directive.value === "sub") handleSubRoot(el, Alpine);
        // else if (directive.value === "subitems") handleSubItems(el, Alpine);
        // else if (directive.value === "subbutton") handleSubButton(el, Alpine);
    }).before("bind");
}

function handleRoot(el, Alpine) {
    Alpine.bind(el, {
        "x-id"() {
            return [
                "dropdown-menu-trigger",
                "dropdown-menu-content",
                "dropdown-menu",
            ];
        },
        ":id"() {
            return this.$id("dropdown-menu");
        },
        "x-modelable": "__menuOpen",
        "x-data"() {
            return {
                __treeWalker: null,
                __menuOpen: false,
                __up() {
                    let old = this.__treeWalker.currentNode;
                    let current = this.__treeWalker.previousSibling();

                    if (!current) {
                        this.__wrap();
                        current = this.__treeWalker.lastChild();
                    }

                    current.focus();
                    current.tabIndex = 0;
                    old.tabIndex = -1;
                },
                __down() {
                    let old = this.__treeWalker.currentNode;
                    let current = this.__treeWalker.nextSibling();

                    if (!current) {
                        this.__wrap();
                        current = this.__treeWalker.firstChild();
                    }

                    current.focus();
                    current.tabIndex = 0;
                    old.tabIndex = -1;
                },
                __left() {
                    console.log(this.__treeWalker.currentNode);
                },
                __right() {
                    if (! this.__treeWalker.currentNode.ariaHasPopup === 'menu') {
                        return;
                    }
                    let old  = this.__treeWalker.currentNode;
                    let current = this.__treeWalker.firstChild();
                    old.tabIndex = -1;
                    current.tabIndex = 0;
                    old.click();
                    current.focus();
                },
                __wrap() {
                    if (!this.__treeWalker.parentNode()) {
                        this.__reset();
                      }
                },
                __reset() {
                    this.__treeWalker.currentNode = this.__treeWalker.root;
               },
            };
        },
        "x-init"() {
            this.$data.__treeWalker = document.createTreeWalker(
                this.$el,
                NodeFilter.SHOW_ELEMENT, {
                    acceptNode(node) {
                        if (node.matches("[role='menuitem']") || node.matches("[role='menuitemcheckbox']") || node.matches("[role='menuitemradio']")) {
                            return NodeFilter.FILTER_ACCEPT;
                        }
                        return NodeFilter.FILTER_SKIP;
                    },
                },
            );
        },
        "@keydown.up.stop.prevent"() {
            this.__up();
        },
        "@keydown.down.stop.prevent"() {
            this.__down();
        },
        "@keydown.left.stop.prevent"() {
            this.__left();
        },
        "@keydown.right.stop.prevent"() {
            this.__right();
        },
    });
}
