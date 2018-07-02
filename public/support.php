<?php $active = 'support'; include 'header.php' ?>


      <div class="row marketing">
        <div class="col-lg-12">

          <h2>Getting Help</h2>

          <h3>Documentation</h3>

          <p>
          All documentation for IXP Manager is linked in the support menu above. There is also a page
          linked there for presentations and talks which should be quiet useful.
          </p>

          <h3>Mailing Lists</h3>

          <ul>
              <li> <b>IXP Manager Users:</b> As an open source project, the primary channel for
                  requesting help is via our mailing list. The developers and operations staff
                  from INEX (and other IXs) are on this list but we also try and foster an
                  environment where other more experienced users can help new comers.
                  <br><br>
                  Please <a href="https://www.inex.ie/mailman/listinfo/ixpmanager">subscribe here</a>
                  (and see the <a href="https://www.inex.ie/pipermail/ixpmanager/">archives here</a>).
                  <br><br>
                  This list has moderate traffic - from low levels to ~100 emails / month.
                  <br><br>
              </li>

              <li> <b>IXP Manager Announce:</b> announcements of new releases, security issues
                    or important project news. We strongly advise all users of IXP Manager to
                    subscribe to this list.
                    <br><br>
                    This list has extremely low volume (~0-5 emails / month) and posting is
                    restricted to project members only.
                    <br><br>
                    Please <a href="https://www.inex.ie/mailman/listinfo/ixpmanager-announce">subscribe here</a>.
                    (and see the <a href="https://www.inex.ie/pipermail/ixpmanager-announce/">archives here</a>).
              </li>
          </ul>

          <h3>Bugs and Feature Requests</h3>

          <p>
            All bugs should be filed on the <a href="https://github.com/inex/IXP-Manager/issues">GitHub
            Issues page</a>. It is <strong>vitally important</strong> that you file a detailed bug report
            with steps on how to reproduce the issue. One line / vague bug reports are likely to be closed
            without investigation.
          </p>

          <p>
            The ideal feature request comes with code via a pull request. This (or
            <a href="/commercial">commercial support</a>)
            is the most probable way to get a feature into IXP Manager! Feel free to file feature requests as an
            <a href="https://github.com/inex/IXP-Manager/issues">issue</a> and tag it as such.
          </p>

          <p>
            We will give all feature requests a fair hearing and due consideration. But, those that we
            are unlikely to implement pro bono or those that do not align with the core purpose of IXP
            Manager may be closed or moved to a <em>feature request file</em> so as not to clog up
            the issue tracker.
          </p>

          <h3>"Support, Out in the Open"</h3>

          <p>

            INEX promotes a "Support, out in the open" model.  When support issues crop up, we invite people
            to send them to the ixpmanager@inex.ie mailing list where a member of the community can answer
            them.  When this model is used, search engines pick up relevant query terms, everybody learns
            about the application and the developers can see what's important to the community.  This allows
            all members of the community to benefit.

          </p>

          <p>

            Alternatively if the problem is a repeatable bug, this can be reported on the <a
            href="https://github.com/inex/IXP-Manager/issues">IXP Manager issue tracker</a> on Github where
            it can be triaged by our dev team.

          </p>

          <p>

            INEX doesn't offer free private technical support.  This means that if you email one of the
            development team directly, we will politely suggest that you send your question to the mailing
            list.

          </p>


          <a name="asking-for-help"></a>
          <h3>The Best Way to Ask For Help</h3>


          <p>
              If you do need help with something and you have decided to open a bug or email the mailing list,
              please remember that the developers and contributors are busy people and their help is on a voluntary
              basis.
          </p>
          <p>
              With that in mind, the best way to get a thoughtful, complete and helpful response is to offer as
              much information as possible in your original query. So, where appropriate, consider the following:
          </p>

          <ul>
              <li> make sure the problem was not already reported as a bug or asked on the mailing list to avoid duplicates
                  (to search the mailing list add this to your Google search: <code>site:www.inex.ie</code>);
              </li>
              <li> ensure you have read the documentation in details: <a href="https://docs.ixpmanager.org/">https://docs.ixpmanager.org/</a>.
                  If, when your problem is solved, you feel that the documentation could be improved, <b>please please
                  <a href="https://docs.ixpmanager.org/dev/docs/">contribute back with suggested improvements</a></b>; </li>
              <li> explain the issue with sufficient detail that we will sure of what you are trying to do; </li>
              <li> always provide detailed steps to reproduce an issue; </li>
              <li> always test if the latest release is affected. Bug reports on older releases cannot be accepted and will be closed; </li>
              <li> provide relevant snippnets of your <code>.env</code> (or all of it after removing keys, passwords, etc.) </li>
              <li> copy all relevant logs to an online pastebin such as <a href="http://p.ip.fi/">this one</a> and place the URL in you
                  email. Logs will usually be found under <code>$IXPROOT/storage/logs/...</code>.
                    <ul>
                        <li> <b>never attach screenshots of logs</b>;
                        <li> <b>never attach log files to your mailing list email</b>;
                    </ul>
              </li>
              <li> mention the OS you are running IXP Manager on (including Linux variant if relevant) </li>
              <li> mention the version of IXP Manager you are running (output from <code>cat $IXPROOT/library/IXP/Version.php | grep APPLICATION</code>); </li>
              <li> mention the version of PHP you have (<code>php -v</code>) </code>

          </ul>


        </div>

<?php include 'footer.php'; ?>
