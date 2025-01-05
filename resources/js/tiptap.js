import { Editor } from "https://esm.sh/@tiptap/core";
import StarterKit from "https://esm.sh/@tiptap/starter-kit";
import Placeholder from "https://esm.sh/@tiptap/extension-placeholder";
import Paragraph from "https://esm.sh/@tiptap/extension-paragraph";
import Bold from "https://esm.sh/@tiptap/extension-bold";
import Underline from "https://esm.sh/@tiptap/extension-underline";
import Link from "https://esm.sh/@tiptap/extension-link";
import BulletList from "https://esm.sh/@tiptap/extension-bullet-list";
import OrderedList from "https://esm.sh/@tiptap/extension-ordered-list";
import ListItem from "https://esm.sh/@tiptap/extension-list-item";
import Blockquote from "https://esm.sh/@tiptap/extension-blockquote";

const editor = new Editor({
    element: document.querySelector("#hs-editor-tiptap [data-hs-editor-field]"),
    content:
        document
            .querySelector("#hs-editor-tiptap [data-hs-editor-field]")
            .getAttribute("data-default-content") || "",
    editorProps: {
        attributes: {
            class: "relative min-h-40 p-3",
        },
    },
    extensions: [
        StarterKit.configure({
            history: false,
        }),
        Placeholder.configure({
            placeholder: "Add a message, if you'd like.",
            emptyNodeClass: "before:text-gray-500 text-sm ",
        }),
        Paragraph.configure({
            HTMLAttributes: {
                class: "text-inherit text-gray-800 ",
            },
        }),
        Bold.configure({
            HTMLAttributes: {
                class: "font-bold",
            },
        }),
        Underline,
        Link.configure({
            HTMLAttributes: {
                class: "inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium ",
            },
        }),
        BulletList.configure({
            HTMLAttributes: {
                class: "list-disc list-inside text-gray-800 ",
            },
        }),
        OrderedList.configure({
            HTMLAttributes: {
                class: "list-decimal list-inside text-gray-800 ",
            },
        }),
        ListItem.configure({
            HTMLAttributes: {
                class: "marker:text-sm",
            },
        }),
        Blockquote.configure({
            HTMLAttributes: {
                class: "relative border-s-4 ps-4 sm:ps-6  [&>p]:sm:text-lg",
            },
        }),
    ],
});
const actions = [
    {
        id: "#hs-editor-tiptap [data-hs-editor-bold]",
        fn: () => editor.chain().focus().toggleBold().run(),
        isActive: () => editor.isActive("bold"),
    },
    {
        id: "#hs-editor-tiptap [data-hs-editor-italic]",
        fn: () => editor.chain().focus().toggleItalic().run(),
        isActive: () => editor.isActive("italic"),
    },
    {
        id: "#hs-editor-tiptap [data-hs-editor-underline]",
        fn: () => editor.chain().focus().toggleUnderline().run(),
        isActive: () => editor.isActive("underline"),
    },
    {
        id: "#hs-editor-tiptap [data-hs-editor-strike]",
        fn: () => editor.chain().focus().toggleStrike().run(),
        isActive: () => editor.isActive("strike"),
    },
    {
        id: "#hs-editor-tiptap [data-hs-editor-link]",
        fn: () => {
            const url = window.prompt("URL");
            editor
                .chain()
                .focus()
                .extendMarkRange("link")
                .setLink({
                    href: url,
                })
                .run();
        },
        isActive: () => editor.isActive("link"),
    },
    {
        id: "#hs-editor-tiptap [data-hs-editor-ol]",
        fn: () => editor.chain().focus().toggleOrderedList().run(),
        isActive: () => editor.isActive("ol"),
    },
    {
        id: "#hs-editor-tiptap [data-hs-editor-ul]",
        fn: () => editor.chain().focus().toggleBulletList().run(),
        isActive: () => editor.isActive("ul"),
    },
    {
        id: "#hs-editor-tiptap [data-hs-editor-blockquote]",
        fn: () => editor.chain().focus().toggleBlockquote().run(),
        isActive: () => editor.isActive("blockquote"),
    },
    {
        id: "#hs-editor-tiptap [data-hs-editor-code]",
        fn: () => editor.chain().focus().toggleCode().run(),
        isActive: () => editor.isActive("code"),
    },
];

actions.forEach(({ id, fn, isActive }) => {
    const action = document.querySelector(id);

    if (action === null) return;

    action.addEventListener("click", () => {
        fn();
        if (isActive()) {
            action.classList.add("bg-gray-100");
            action.classList.remove("");
        } else {
            action.classList.remove("bg-gray-100");
            action.classList.add("");
        }
    });
});

const editorElement = document.querySelector("[data-hs-editor-field]");
const inputElement = document.querySelector(
    `#${editorElement.getAttribute("data-hs-editor-field")}`
);

editor.on("update", () => {
    const content = editor.getHTML();
    inputElement.value = content;
});
