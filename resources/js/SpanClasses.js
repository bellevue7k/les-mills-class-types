const {core: commands} = Statamic.$bard.tiptap;
const {markInputRule} = commands;

export default class spanClasses {
    name() {
        return "spanClasses";
    }

    schema() {
        return {
            attrs: {
                key: '',
            },
            parseDOM: [
                {
                    tag: "span",
                    getAttrs: (value) => ({key: value}),
                }
            ],
            toDOM: (mark) => [
                "span",
                {
                    'class': mark.attrs.key,
                    'data-class': mark.attrs.key
                },
                0,
            ],
        };
    }

    commands({type, updateMark}) {
        return (attrs) => updateMark(type, attrs);
    }

    inputRules({type}) {
        return [markInputRule(/(?:\*\*|__)([^*_]+)(?:\*\*|__)$/, type)];
    }

    pasteRules({type}) {
        return [];
    }

    plugins() {
        return [];
    }
}
