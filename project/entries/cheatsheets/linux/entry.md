---
title: Linux
visibility: visible
routable: true
description: Are you new to Linux and looking for a quick reference guide to commonly used commands? Our Linux commands cheatsheet has you covered, with clear and concise explanations for each command, as well as examples of how to use them. Whether you're a beginner or an experienced Linux user, this cheatsheet is a handy resource to keep on hand. Boost your productivity and save time with our easy-to-use Linux commands cheatsheet.
template: cheatsheet
seo:
  title: Linux Cheatsheet
  description: Are you new to Linux and looking for a quick reference guide to commonly used commands? Our Linux commands cheatsheet has you covered, with clear and concise explanations for each command, as well as examples of how to use them. Whether you're a beginner or an experienced Linux user, this cheatsheet is a handy resource to keep on hand. Boost your productivity and save time with our easy-to-use Linux commands cheatsheet.
---

<h2 class="text-center uppercase">Commands</h2>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-ls" name="command-ls" class="pointer hover:text-slate-900">ls</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Directory listing (list all files/folders on current directory)</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">ls [options] [file|dir]</code></pre>
    <p class="mb-2 font-bold">Options:</p>
    <table class="mb-2">
      <tr>
        <td width="120">-a</td>
        <td>List all files including hidden file starting with '.' </td>
      </tr>
      <tr>
        <td>--color</td>
        <td>Colored list [=always/never/auto]</td>
      </tr>
      <tr>
        <td>-d</td>
        <td>Dist directories</td>
      </tr>
      <tr>
        <td>-F</td>
        <td>Add one char of */=>@| to enteries</td>
      </tr>
      <tr>
        <td>-i</td>
        <td>List file's inode index number</td>
      </tr>
      <tr>
        <td>-l</td>
        <td>List with long format - show permissions</td>
      </tr>
      <tr>
        <td>-la</td>
        <td>List long format including hidden files</td>
      </tr>
      <tr>
        <td>-lh</td>
        <td>List long format with readable file size</td>
      </tr>
      <tr>
        <td>-ls</td>
        <td>List with long format with file size</td>
      </tr>
      <tr>
        <td>-r</td>
        <td>List in reverse order</td>
      </tr>
      <tr>
        <td>-R</td>
        <td>List recursively directory tree</td>
      </tr>
      <tr>
        <td>-s</td>
        <td>List file size</td>
      </tr>
      <tr>
        <td>-S</td>
        <td>Sort by file size</td>
      </tr>
      <tr>
        <td>-t</td>
        <td>Sort by time & date</td>
      </tr>
      <tr>
        <td>-T</td>
        <td>Sort by extension name</td>
      </tr>
    </table>
  </div>
</div>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-cd" name="command-cd" class="pointer hover:text-slate-900">cd</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Navigate through the Linux files and directories.</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">cd [directory]</code></pre>
  </div>
</div>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-pwd" name="command-pwd" class="pointer hover:text-slate-900">pwd</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Print working directory.</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">pwd [option]</code></pre>
    <p class="mb-2 font-bold">Options:</p>
    <table class="mb-2">
      <tr>
        <td width="120">-L<br>–logical</td>
        <td>Prints environment variable content, including symbolic links</td>
      </tr>
      <tr>
        <td>-P<br>–physical</td>
        <td>Prints the actual path of the current directory</td>
      </tr>
    </table>
  </div>
</div>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-mkdir" name="command-mkdir" class="pointer hover:text-slate-900">mkdir</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Create directories.</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">mkdir [option] directory_name</code></pre>
    <p class="mb-2 font-bold">Options:</p>
    <table class="mb-2">
      <tr>
        <td>-p<br>–parents</td>
        <td>Create a directory between two existing folders</td>
      </tr>
      <tr>
        <td>-m</td>
        <td>Sets the file permissions</td>
      </tr>
      <tr>
        <td>-v</td>
        <td>Confirm each file before deleting it</td>
      </tr>
      <tr>
        <td>-r</td>
        <td>Prints a message for each created directory</td>
      </tr>
    </table>
  </div>
</div>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-rm" name="command-rm" class="pointer hover:text-slate-900">rm</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Removing files and directories.</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">rm [option] [dir_name/file_name]</code></pre>
    <p class="mb-2 font-bold">Options:</p>
    <table class="mb-2">
      <tr>
        <td width="120">-f</td>
        <td>Prompt the user and to ignore nonexistent files and arguments</td>
      </tr>
      <tr>
        <td>-v</td>
        <td>Get information about what is being removed</td>
      </tr>
      <tr>
        <td>-i</td>
        <td>Confirm each file before deleting it</td>
      </tr>
      <tr>
        <td>-r</td>
        <td>Remove a directory and its content</td>
      </tr>
    </table>
  </div>
</div>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-cp" name="command-cp" class="pointer hover:text-slate-900">cp</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Copy files or directories and their content.</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">cp [options] source dest</code></pre>
    <p class="mb-2 font-bold">Options:</p>
    <table class="mb-2">
      <tr>
        <td>-f</td>
        <td>Force copy by removing the destination file if needed</td>
      </tr>
      <tr>
        <td>-a</td>
        <td>Archive files</td>
      </tr>
      <tr>
        <td>-l</td>
        <td>Link files instead of copy</td>
      </tr>
      <tr>
        <td>-L</td>
        <td>Follow symbolic links</td>
      </tr>
      <tr>
        <td>-n</td>
        <td>No file overwrite</td>
      </tr>
      <tr>
        <td>-R</td>
        <td>Recursive copy (including hidden files)</td>
      </tr>
      <tr>
        <td>-U</td>
        <td>Update - copy when source is newer than dest</td>
      </tr>
      <tr>
        <td>-U</td>
        <td>Verbose - print informative messages</td>
      </tr>
    </table>
  </div>
</div>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-cat" name="command-cat" class="pointer hover:text-slate-900">cat</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Display the content of text files and to combine several files to one file.</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">cat [options] file1 [file2...]</code></pre>
    <p class="mb-2 font-bold">Options:</p>
    <table class="mb-2">
      <tr>
        <td>-b</td>
        <td>Add line numbers to non blank lines</td>
      </tr>
      <tr>
        <td>-n</td>
        <td>Add line numbers to all lines</td>
      </tr>
      <tr>
        <td>-s</td>
        <td>Squeeze blank lines to one line</td>
      </tr>
      <tr>
        <td>-E</td>
        <td>Show $ at the end of line</td>
      </tr>
      <tr>
        <td>-T</td>
        <td>Show ^I instead of tabs</td>
      </tr>
    </table>
  </div>
</div>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-mv" name="command-mv" class="pointer hover:text-slate-900">mv</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Move files and directories.</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">mv [options] source dest</code></pre>
    <p class="mb-2 font-bold">Options:</p>
    <table class="mb-2">
      <tr>
        <td>-f</td>
        <td>Force move by overwriting destination file without prompt</td>
      </tr>
      <tr>
        <td>-i</td>
        <td>Interactive prompt before overwrite</td>
      </tr>
      <tr>
        <td>-u</td>
        <td>Update - move when source is newer than destination</td>
      </tr>
      <tr>
        <td>-v</td>
        <td>Verbose - print source and destination files</td>
      </tr>
    </table>
  </div>
</div>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-touch" name="command-touch" class="pointer hover:text-slate-900">touch</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Create or udpate file.</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">touch file [options]</code></pre>
    <p class="mb-2 font-bold">Options:</p>
    <table class="mb-2">
      <tr>
        <td width="160">-a</td>
        <td>Set the access time only</td>
      </tr>
      <tr>
        <td>-c<br>--no-create</td>
        <td>Do not create files</td>
      </tr>
      <tr>
        <td>-d<br>--date</td>
        <td>Parse the date string datestring, and use it instead of current time. Strings valid to the date command are accepted by the -d option.</td>
      </tr>
      <tr>
        <td>-h</td>
        <td>If file is a symbolic link and this option is specified, touch modifies the timestamp of the symlink, rather than its referenced file. If this option is not specified, touch will dereference symlinks before making modifications.</td>
      </tr>
      <tr>
        <td>-m</td>
        <td>Set modification time only.</td>
      </tr>
      <tr>
        <td>-r=reffile</td>
        <td>Set the times of file to the times of file reffile instead of the current time.</td>
      </tr>
      <tr>
        <td>-t timestamp</td>
        <td>Use the numeric timestamp instead of the current time. The format of timestamp is [[CC]YY]MMDDhhmm[.ss].</td>
      </tr>
    </table>
  </div>
</div>

<div class="card">
  <div class="card-header flex items-center">
    <div>
      <a href="#command-tail" name="command-tail" class="pointer hover:text-slate-900">tail</a>
    </div>
    <div class="ml-auto opacity-50 text-sm">
      command
    </div>
  </div>
  <div class="card-content">
    <p class="mb-4 mt-2">Read a file, and outputs the last part of it (the "tail").</p>
    <p class="mb-2 font-bold">Syntax:</p>
    <pre><code class="!mb-4">tail [options] [file ...]</code></pre>
    <p class="mb-2 font-bold">Options:</p>
    <table class="mb-2">
      <tr>
        <td width="180">-c [+]num<br>--bytes=[+]num</td>
        <td>Output the last num bytes of each file.<br><br>
          You can also use a plus sign before num to output everything starting at byte num. For instance, -c +1 prints everything.
          <br><br>
          A multiplier suffix can be used after num to specify units: b (512), kB (1000), K (1024), MB (1000*1000), M (1024*1024), GB (1000*1000*1000), G (1024*1024*1024), and so on for T (terabyte), P (petabyte), E (exabyte), Z (zettabyte), Y (yottabyte).</td>
      </tr>
      <tr>
        <td>-f<br>--follow[={name|descriptor}]</td>
        <td>This option causes tail to loop forever, checking for new data at the end of the file(s). When new data appears, it will be printed.
          <br><br>
          If you follow more than one file, a header will be printed to indicate which file's data is being printed.
          <br><br>
          If the file shrinks instead of grows, tail lets you know with a message.
          <br><br>
          If you specify name, the file with that name is followed, regardless of its file descriptor.
          <br><br>
          If you specify descriptor, the same file is followed, even if it's renamed. This is the default behavior.</td>
      </tr>
      <tr>
        <td>-F</td>
        <td>"Follow and retry". Same as using --follow=name --retry.</td>
      </tr>
      <tr>
        <td>-n num<br>--lines=num</td>
        <td>Output the last num lines, instead of the default (10).<br>If you put a plus sign before num, tail outputs all lines beginning with that line. For example, -n +1 prints every line.</td>
      </tr>
      <tr>
        <td>--max-unchanged-stats=num</td>
        <td>If you are following a file with -f or --follow=name, tail continuously checks the file to see if its size has changed. If the size has changed, it reopens the file and looks for new data to print. The --max-unchanged-stats option reopens a file, even if its size has not changed, after every num checks.</td>
      </tr>
      <tr>
        <td>--pid=pid</td>
        <td>When following with -f or --follow, terminate operation after process ID pid dies.</td>
      </tr>
      <tr>
        <td>-q<br>--quiet<br>--silent</td>
        <td>Never output headers.</td>
      </tr>
      <tr>
        <td>--retry</td>
        <td>Keep trying to open a file even if it's temporarily inaccessible; useful with the --follow=name option.</td>
      </tr>
      <tr>
        <td>-s num<br>--sleep-interval=num</td>
        <td>When following with -f or --follow, sleep for approximately num seconds between file checks. With --pid=pid, check process pid at least once every num seconds.</td>
      </tr>
      <tr>
        <td>-v<br>--verbose</td>
        <td>Always print headers.</td>
      </tr>
    </table>
  </div>
</div>


