// 箇条書きリスト
(function () {
  var el = wp.element.createElement,
    blocks = wp.blocks,
    RichText = wp.editor.RichText;

  blocks.registerBlockType("my-plugin/ullist", {
    title: "箇条書きリスト",
    icon: "wordpress-alt",
    category: "text",
    attributes: {
      content: {
        type: "array",
        source: "children",
        selector: ".ul-list",
      },
    },

    edit: function (props) {
      var content = props.attributes.content;
      return el(RichText, {
        tagName: "ul",
        multiline: "li",
        className: "ul-list",
        value: content,
        onChange: function (newContent) {
          props.setAttributes({ content: newContent });
        },
      });
    },

    save: function (props) {
      return el(RichText.Content, {
        tagName: "ul",
        className: "ul-list",
        value: props.attributes.content,
      });
    },
  });
})();

// 番号付きリスト
(function () {
  var el = wp.element.createElement,
    blocks = wp.blocks,
    RichText = wp.editor.RichText;

  blocks.registerBlockType("my-plugin/ollist", {
    title: "番号付きリスト",
    icon: "wordpress-alt",
    category: "text",
    attributes: {
      content: {
        type: "array",
        source: "children",
        selector: ".ol-list",
      },
    },

    edit: function (props) {
      var content = props.attributes.content;
      return el(RichText, {
        tagName: "ol",
        multiline: "li",
        className: "ol-list",
        value: content,
        onChange: function (newContent) {
          props.setAttributes({ content: newContent });
        },
      });
    },

    save: function (props) {
      return el(RichText.Content, {
        tagName: "ol",
        className: "ol-list",
        value: props.attributes.content,
      });
    },
  });
})();
