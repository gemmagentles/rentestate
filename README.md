# Rentestate

WordPress website for a property-rental business.

This project contains the custom WordPress theme and project setup. The custom theme lives in [`wp-content/themes/rentestate/`](wp-content/themes/rentestate/), and its development notes are documented in the [theme README](wp-content/themes/rentestate/README.md).

---

## What do I need to install before I can use this?

- Node.js - https://nodejs.org/en/download/
- Sass - `npm install -g sass`
- WordPress - either install manually from https://wordpress.org/download/ or through the https://localwp.com/ app

---

## How do I use this project?

---

### Step one
Clone this repo into the `wp-content` folder of your WordPress install.

---

### Step two
`cd themes/custom-theme`

---

### Step three
Install all packages listed in the `package.json` file from NPM:

```bash
npm install
```

---

### Step four
Run the project and compile SCSS:

```bash
npm run watch
```

---

### Step five
Start building! You can change the styles by editing or adding a new SCSS file in the `sass` folder and importing it into `main.scss`. You can change the layout of `header.php` and `footer.php`. You can create a custom post type template by copying `single-course.php` and updating the post name. You can also copy the example template and rename it for a page such as `home-template.php`, then add ACF components and assign the template in the WordPress CMS.

---

## Git Repository Rules

1. Clone this repo from the `master` branch.
2. Use Git Flow to manage branches:

```bash
git flow init
```

This creates a `develop` branch while `master` stores the official release history.

3. Create a feature branch before making changes:

```bash
git flow feature start name-of-branch
```

4. All commits should start with a Jira ticket number, for example:

```bash
git commit -m "ITO-12345 - what I did and why"
```

5. Push changes when complete so another developer can view them:

```bash
git push -u origin feature/name-of-branch
```

6. When a feature branch is complete, create a pull request on GitHub. All pull requests should go to `@ggentles` (repo manager).
7. `@ggentles` will merge to `develop` and do a release to `master` once approved.

---

## Git Management Best Practices

- Commit early, commit often
- Write meaningful commit messages explaining what and why you changed something
- Follow standard conventions for branch naming, tagging, and coding
- Before merging anything into `master`, merge from `master` and fix any merge conflicts in the feature branch
