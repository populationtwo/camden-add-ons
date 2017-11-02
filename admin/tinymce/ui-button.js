(function () {
    tinymce.PluginManager.add('shortcode_tinymce_button', function (editor, url) {
        editor.addButton('shortcode_tinymce_button', {
            title: 'Shortcode generator',
            type: 'menubutton',
            icon: 'icon camden-shortcode-icon',
            menu: [
                {
                    text: 'Grid Layout',
                    value: 'Grid Layout',
                    menu: [
                        {
                            text: '2 Columns',
                            value: '2 Columns',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[one_half_alpha] Insert content here [/one_half_alpha] [one_half_omega] Insert content here[/one_half_omega]");
                            }
                        },
                        {
                            text: '3 Columns',
                            value: '3 Columns',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[one_third_alpha] Insert content here [/one_third_alpha] [one_third] Insert content here[/one_third] [one_third_omega] Insert content here[/one_third_omega]");
                            }
                        },
                        {
                            text: '4 Columns',
                            value: '4 Columns',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[one_fourth_alpha] Insert content here [/one_fourth_alpha] [one_fourth] Insert content here[/one_fourth] [one_fourth] Insert content here[/one_fourth] [one_fourth_omega] Insert content here[/one_fourth_omega]");
                            }
                        },
                        {
                            text: '1/3 & 2/3 Columns',
                            value: '1/3 & 2/3 Columns',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[one_third_alpha] Insert content here [/one_third_alpha] [two_third_omega] Insert content here[/two_third_omega]");
                            }
                        },
                        {
                            text: '2/3 & 1/3  Columns',
                            value: '2/3 & 1/3  Columns',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[two_third_alpha] Insert content here [/two_third_alpha] [one_third_omega] Insert content here[/one_third_omega]");
                            }
                        },
                        {
                            text: 'Custom',
                            value: 'custom',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[column columns=12] Insert content here [/column]")
                            }
                        }
                    ]
                },
                {
                    text: 'Typography',
                    value: 'typography',
                    menu: [
                        {
                            text: 'Check List',
                            value: 'checklist',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[checklist]<li>List item 1</li><li>List item 2</li><li>List item 3</li>[/checklist]")
                            }
                        },
                        {
                            text: 'Check List Circled',
                            value: 'checklist_circled',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[checklist_circled]<li>List item 1</li><li>List item 2</li><li>List item 3</li>[/checklist_circled]")
                            }
                        },
                        {
                            text: 'Left Pull Quotes',
                            value: 'pullquote_left',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[pullquote_left] Insert content here [/pullquote_left]")
                            }
                        },
                        {
                            text: 'Right Pull Quotes',
                            value: 'pullquote_right',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[pullquote_right] Insert content here [/pullquote_right]")
                            }
                        },
                        {
                            text: 'Blockquote',
                            value: 'quote',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[quote] Insert content here [/quote]")
                            }
                        }
                    ]
                },
                {
                    text: 'Media',
                    value: 'media',
                    menu: [
                        // {
                        //     text: 'Grid Columns',
                        //     value: 'grid',
                        //     onclick: function (e) {
                        //         e.stopPropagation();
                        //         editor.insertContent("[column columns=12] Insert content here [/column]")
                        //     }
                        // },
                        {
                            text: 'Orbit',
                            value: 'orbit',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[orbit]")
                            }
                        },

                        {
                            text: 'Reveal',
                            value: 'reveal',
                            onclick: function (e) {
                                e.stopPropagation();
                                editor.insertContent("[reveal link=\"Link text\" linkclass=\"button radius secondary\" class=\"small\" ]Insert Reveal content here[/reveal]")
                            }
                        }
                    ]
                },
                {
                    text: 'Accordion',
                    value: 'accordion',
                    onclick: function (e) {
                        e.stopPropagation();
                        editor.insertContent("[accs class=\"optionalclass\"][acc active=\"is-active\" title=\"Accordion 1\"]Accordion pane 1 content goes here.[/acc][acc title=\"Accordion 2\"]Accordion pane 2 content goes here.[/acc][acc title=\"Accordion 3\"]Accordion pane 3 content goes here.[/acc][acc title=\"Accordion 4\"]Accordion pane 4 content goes here.[/acc][/accs]")

                    }
                },
                {
                    text: 'Tabs',
                    value: 'tabs',
                    onclick: function (e) {
                        e.stopPropagation();
                        editor.insertContent("[tabs class=\"optionalclass\"][tab title=\"Tab 1\" active=\"is-active\"]Insert Tab 1 content here.[/tab][tab title=\"Tab 2\"]Insert Tab 2 content here.[/tab][tab title=\"Tab 3\"]Insert Tab 3 content here.[/tab][tab title=\"Tab 4\"]Insert Tab 4 content here.[/tab][/tabs]")
                    }
                },
                {
                    text: 'Vertical Tabs',
                    value: 'vertical tabs',
                    onclick: function (e) {
                        e.stopPropagation();
                        editor.insertContent("[vtabs class=\"optionalclass\"] [vtab title=\"Tab 1 Title\" active=\"is-active\"] Insert Tab 1 content here [/vtab] [vtab title=\"Tab 2 Title\"] Insert Tab 2 content here [/vtab] [vtab title=\"Tab 3 Title\"] Insert Tab 3 content here [/vtab] [/vtabs]")
                    }
                },
                {
                    text: 'Callout',
                    onclick: function () {
                        editor.windowManager.open({
                            title: 'Insert callout',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'title',
                                    label: 'Callout text'
                                },
                                {
                                    type: 'listbox',
                                    name: 'type',
                                    label: 'Callout type',
                                    'values': [
                                        {text: 'Standard', value: ''},
                                        {text: 'Success', value: 'success'},
                                        {text: 'Warning', value: 'warning'},
                                        {text: 'Alert', value: 'alert'},
                                        {text: 'Primary', value: 'primary'},
                                        {text: 'Secondary', value: 'secondary'}
                                    ]
                                },
                                {
                                    type: 'checkbox',
                                    name: 'close',
                                    checked: false,
                                    label: 'Add close button?'
                                }
                            ],
                            onsubmit: function (e) {
                                var setType;
                                var setClose;
                                if (e.data.type) {
                                    setType = "type=\"" + e.data.type + "\""
                                } else {
                                    setType = ""
                                }

                                if (e.data.close) {
                                    setClose = ""
                                } else {
                                    setClose = "close=no"
                                }
                                editor.insertContent("[callout " + ' ' + setType + ' ' + setClose + "] " + e.data.title + " [/callout]");
                            }
                        })
                    }
                },
                {
                    text: 'Tooltip',
                    value: 'tooltip',
                    onclick: function (e) {
                        e.stopPropagation();
                        editor.insertContent("[tooltip position=\"top\" title=\"Insert Tooltip content here\" ]Tooltip[/tooltip]")
                    }
                },
                {
                    text: 'Button',
                    onclick: function () {
                        editor.windowManager.open({
                            title: 'Insert button',
                            body: [
                                {
                                    type: 'listbox',
                                    name: 'type',
                                    label: 'Button Type',
                                    'values': [
                                        {text: 'Action', value: 'action'},
                                        {text: 'Basic', value: 'basic'},
                                        {text: 'Hollow', value: 'hollow'}
                                    ]
                                },
                                {
                                    type: 'textbox',
                                    name: 'title',
                                    label: 'Button text',
                                    value: 'Button'
                                },
                                {
                                    type: 'textbox',
                                    name: 'url',
                                    label: 'URL'
                                },
                                {
                                    type: 'listbox',
                                    name: 'color',
                                    label: 'Button color',
                                    'values': [
                                        {text: 'Default', value: 'default'},
                                        {text: 'Primary', value: 'primary'},
                                        {text: 'Secondary', value: 'secondary'},
                                        {text: 'Red', value: 'red'},
                                        {text: 'Orange', value: 'orange'},
                                        {text: 'Yellow', value: 'yellow'},
                                        {text: 'Green', value: 'green'},
                                        {text: 'Blue', value: 'blue'},
                                        {text: 'Teal', value: 'teal'}
                                    ]
                                },
                                {
                                    type: 'listbox',
                                    name: 'size',
                                    label: 'Size',
                                    'values': [
                                        {text: 'Default', value: ''},
                                        {text: 'Small', value: 'small'},
                                        {text: 'Large', value: 'large'}
                                    ]
                                },
                                {
                                    type: 'checkbox',
                                    name: 'target',
                                    checked: false,
                                    label: 'Open URL in a new window'
                                },
                                {
                                    type: 'checkbox',
                                    name: 'arrow',
                                    checked: true,
                                    label: 'Add arrow icon'
                                },

                            ],
                            onsubmit: function (e) {
                                var setTarget;
                                var setArrow;
                                if (e.data.target) {
                                    setTarget = "target=\"_blank\""
                                } else {
                                    setTarget = ""
                                }

                                editor.insertContent("[btn url=\"" + e.data.url + "\" type=\"" + e.data.type + "\" color=\"" + e.data.color + "\" " + setTarget + " arrow=\"" + e.data.arrow + "\" size=\"" + e.data.size + "\"]  " + e.data.title + "  [/btn]");

                            }
                        });
                    }
                }
            ]
        });
    });
})();