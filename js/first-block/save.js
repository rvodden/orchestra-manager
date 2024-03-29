import { useBlockProps } from '@wordpress/block-editor';

export function save( { attributes } ) {
	const blockProps = useBlockProps.save();
    return <div { ...blockProps }>{ attributes.message }</div>;
}
