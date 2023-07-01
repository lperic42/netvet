import Quill from 'quill';

let BlockEmbed = Quill.import('blots/block/embed');

class WinkImageBlot extends BlockEmbed {
    static create(value) {
        let node = super.create();
        let img = document.createElement('img');

        node.setAttribute('contenteditable', false);
        node.dataset.layout = value.layout;

        img.setAttribute('alt', value.alt);
        img.setAttribute('data-caption', value.caption);
        img.setAttribute('src', value.url);
        node.appendChild(img);
        console.log(value);
        if (value.caption) {
            let caption = document.createElement('p');
            caption.innerHTML = value.caption;
            node.appendChild(caption);
        }

        return node;
    }

    static value(node) {
        let img = node.querySelector('img');
        let caption = '';

        if(img.getAttribute('alt').length > 0 && !img.getAttribute('data-caption')) {
            caption = img.getAttribute('alt');
        } else {
            caption = img.getAttribute('data-caption')
        }

        return {
            layout: node.dataset.layout,
            alt: img.getAttribute('alt'),
            caption: caption,
            url: img.getAttribute('src')
        };
    }
}

WinkImageBlot.tagName = 'div';
WinkImageBlot.blotName = 'captioned-image';
WinkImageBlot.className = 'embedded_image';

export default WinkImageBlot;
