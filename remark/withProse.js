const proseComponents = ['Variants', 'Disabling']

const isJsNode = (node) => {
  return (
    ['jsx', 'import', 'export'].includes(node.type) &&
    !new RegExp(`^<(${proseComponents.join('|')})(>|\\s)`).test(node.value)
  )
}

module.exports.withProse = () => {
  return (tree) => {
    let insideProse = false
    tree.children = tree.children.flatMap((node, i) => {
      if (insideProse && isJsNode(node)) {
        insideProse = false
        return [{ type: 'jsx', value: '</div>' }, node]
      }
      if (!insideProse && !isJsNode(node)) {
        insideProse = true
        return [
          { type: 'jsx', value: '<div className="prose">' },
          node,
          ...(i === tree.children.length - 1 ? [{ type: 'jsx', value: '</div>' }] : []),
        ]
      }
      if (i === tree.children.length - 1 && insideProse) {
        return [node, { type: 'jsx', value: '</div>' }]
      }
      return [node]
    })
  }
}
