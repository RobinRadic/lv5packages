<!---
title: Simple documentation
author: Robin Radic
-->


### Writing documentation
Any valid markdown file will be rendered as documentation. So if you have one or more markdown files up in your repo, you can simply put it into the project structure.
More information about how to structure your directories/files in a bit. Lets first look at how this documentation generator provides you with
 some nice extra's.
  
  
  
<!--- RD(col-left) -->
<!--- RD(toc(writing-documentation)) -->
### Add a top DocBlock
Markdown parsers do not render `<!--- these documenation blocks -->`. This generator makes good use of that
and is able to parse some specially structured DocBlocks. First of all, you can include a DocBlock at the start of the file.
 
```markdown
<!---
title: Simple documentation
-->

### Writing documentation
**Any** valid markdown file will be rendered as documentation....
```

The first DocBlock will be parsed as YAML to php array by the generator and those values will be used for numerous purposes. (A full overview is provided in this
documentation)

Moving onto a somewhat more eleborate preview, showing a bit of the features it could provide.
  
```markdown
<!---
title: Simple documentation
layout: default
author: Robin Radic
date: 23-11-2015
toc:
  writing-documentation: Writing documentation
  add-a-top-docblock: Add a top DocBlock
-->

<!--- RD(col-left) -->
<!--- RD(toc(writing-documentation)) -->
### Writing documentation
**Any** valid markdown file will be rendered as documentation....
```
