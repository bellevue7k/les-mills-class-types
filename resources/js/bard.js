import SpanClasses from "./SpanClasses";
import SpanClassesMenu from "./SpanClassesMenu.vue";

Statamic.$bard.extend(({mark}) => mark(new SpanClasses()));
Statamic.$bard.buttons(() => {
    return {
        name: 'spanclasses',
        text: 'Span Classes',
        command: 'classType',
        args: {
            key: ""
        },
        icon: 'cogs',
        component: SpanClassesMenu
    };
});
