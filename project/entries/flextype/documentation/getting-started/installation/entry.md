---
title: Installation
description: Flextype is incredibly easy to set up and get running.
order: 3
template: flextype/docs
seo:
  title: Installation | Flextype
breadcrumbs:
  1:
    title: "Getting Started"
    link: "[url]/flextype/documentation/getting-started/"
on_this_page:
  -
    title: "Download and installation"
    link: "download-and-installation"
  -
    title: "Installation issues"
    link: "installation-issues"
---

Flextype is incredibly easy to set up and get running. Installation of Flextype is a simple process without any of hard routine of configuring databases, servers and etc...

### <a name="download-and-installation"></a> Download and installation

Flextype core package with a minimal Flextype setup with the basics you need to start a project from scratch. It is the ideal choice if you are already familiar with Flextype and want to start your project step-by-step.

<ol>
    <li><a href="https://awilum.github.io/flextype/downloads/">Download Flextype</a></li>
    <li>Unzip the contents to a new folder on your local computer, and upload to your webhost using the (S)FTP client of your choice. After you’ve done this, create directory <code>project</code> and be sure to chmod the following directory to <code>755</code> (or <code>777</code>), so it is readable and writable by Flextype.</li>
</ol>

> If you are running Flextype in subdirectory you should update `RewriteBase` in your `.htaccess` with  `/subdirectory/path/` and update base_path setting in your `project/config/flextype/settings.yaml` with `subdirectory/path`

> By default cache is enabled, so after any changes you do with site templates, content or settings, you should delete flextype root var folder manually or with help of console command `./bin/flextype cache:clear` 

### <a name="installation-issues"></a> Installation issues

##### Broken subpages

Your homepage is working, but subpages won't open or lead to a server error?

1. Make sure that the .htaccess file is present in your Flextype folder.
2. Check if `mod_rewrite` is enabled on your server.
3. Please try setting the `RewriteBase` in the .htaccess file:

```
RewriteBase /
```

If you run Flextype in a subfolder, make sure to set the RewriteBase according to the name of your subfolder:

```
RewriteBase /my-subfolder/
```
