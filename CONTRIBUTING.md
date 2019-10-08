# How to Contribute

## Contributing
Here's the process for contributing:

1. Fork Smart Factory Shared to your GitHub account.
2. Clone your GitHub copy of the repository into your local workspace.
3. Write code, fix bugs, and add tests with 100% code coverage.
4. Commit your changes to your local workspace and push them up to your GitHub copy.
5. You submit a GitHub pull request with a description of what the change is.
6. The contribution is reviewed. Maybe there will be some banter back-and-forth in the comments.
7. If all goes well, your pull request will be accepted and your changes are merged in.


## Coding Standards

PSR-1/2/12 are a solid foundation, but are not an entire coding style by themselves. I have taken the time to
document all of the nitpicky patterns and nuances of my personal coding style. It goes well-beyond brace placement and
tabs vs. spaces to cover topics such as docblock annotations, ternary operations and which variation of English to use.
It aims for thoroughness and pedanticism over hoping that we can all get along.

<https://github.mheducation.com/ryan-parman/php-coding-standards>


## Auto-fixing Style Issues

You can auto-fix _many_ style issues by running the following:

```bash
composer lint
```
